import {useState} from "react"
import cafe from "./../../assets/images/celular.png"
import './testes.css'

function Testes(){

    const nome = "Danielle Campos";

    return (
        <div>
            <h1>Seja bem vindo {nome}</h1>
            <button onClick={() =>{
                 alert("oi")
            }}>Clique aqui</button>
        </div>
    );
}

export default Testes;