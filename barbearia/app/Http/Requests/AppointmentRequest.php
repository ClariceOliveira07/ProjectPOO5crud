<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'client_id'=>'required|exists:client_id',
            'service_id'=>'required|exists:service_id',
            'data_agenda'=>'required|date|after:today',
            'hora_agenda'=>'required',
            'status'=>'required|in:Pendente,Concluído,Cancelado',
            'notes'=>'nullable|string',
        ];
    }
}
