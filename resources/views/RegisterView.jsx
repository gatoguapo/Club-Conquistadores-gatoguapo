import React from 'react'
import { Input } from '../js/components/Input';
import "../css/RegisterView.css"

function RegisterView() {
    return (
        <div className='Register'>
            <div className='RegisterLeft'>
                <div className='LayoutCandidateTitle'>
                    Datos del joven aspirante
                </div>
                <div className='LayoutCandidateInputs1'>
                    <Input text='Nombre' 
                    className='InputNombre'>

                    </Input>
                </div>
            </div>
            <div className='RegisterRight'>
            </div>
        </div>
    );
}

export default RegisterView
