import React from 'react'
import { Input } from '../js/components/Input';
import { ComboBox } from '../js/components/ComboBox';
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
                    classNameLabel='Label'
                    classNameInput='Input'>
                    </Input>
                    <Input text='Apellidos' 
                    classNameLabel='Label'
                    classNameInput='Input'>
                    </Input>
                    <Input text='E-mail' 
                    classNameLabel='Label'
                    classNameInput='Input'>
                    </Input>
                    <Input text='Contraseña' 
                    type='password'
                    classNameLabel='Label'
                    classNameInput='Input'>
                    </Input>
                    <ComboBox text='Fecha de nacimiento'
                    classNameLabel='Label'
                    classNameCombo='Combo'>
                    </ComboBox>
                </div>
            </div>
            <div className='RegisterRight'>
            </div>
        </div>
    );
}

export default RegisterView
