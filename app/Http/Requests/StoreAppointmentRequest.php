<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppointmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => ['required', 'string', 'max:255'],
            'meeting_at' => ['required', 'date'],
            'phone_number' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'product_id' => ['required', 'integer'],
            'other_product'=> ['required_if:product_id,other','nullable','string','max:255'],
            'brief' => ['required', 'string', 'max:65535'],
        ];
    }

    public function withValidator($validator){
    $validator->after(function ($v) {
            $value = $this->input('product_id');

            if ($value === 'other') {
                return; // valid, akan pakai other_product
            }

            // harus id produk yang ada
            $exists = \App\Models\Product::whereKey($value)->exists();
            if (!$exists) {
                $v->errors()->add('product_id', 'Selected product is invalid.');
            }
        });
    }
}
