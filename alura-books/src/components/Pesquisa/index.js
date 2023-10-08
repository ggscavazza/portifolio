import Input from '../Input'
import styled from 'styled-components'
import { useState } from 'react'
import { livros } from './dadosPesquisa'

const PesquisaContainer = styled.section`
    background-image: linear-gradient(90deg, #002f52 35%, #326589 165%);
    color: #FFF;
    text-align: center;
    padding: 85px 0;
    height: 270px;
    width: 100%;
`

const Titulo = styled.h2`
    color: #FFF;
    font-size: 36px;
    text-align: center;
    width: 100%;
`

const Subtitulo = styled.h3`
    font-size: 16px;
    font-weight: 500;
    margin-bottom: 40px;
`

const CentralizaResultado = styled.div`
width: 100%;
display: flex;
justify-content: center;
`

const Resultado = styled.div`
    gap: 10px;
    color: #fff;
    display: flex;
    margin-top: 50px;
    padding: 10px 20px;
    align-items: center;
    justify-content: center;
    
    p {
        font-size: 26px;
    }
        
    &:hover {
        color: #001729;
        cursor: pointer;
        border-radius: 25px;
        border: 1px solid #fff;
        background-color: #ffffff90;
    }
`

const CapaLivro = styled.img`
    max-height: 200px;
`

function Pesquisa() {
    const [livrosPesquisados, setLivrosPesquisados] = useState([])

    return (
        <PesquisaContainer>
            <Titulo>Já sabe por onde começar?</Titulo>
            <Subtitulo>Encontre seu livro em nossa estante.</Subtitulo>
            <Input 
                placeholder="Escreva sua próxima leitura"
                onChange={evento => {
                    const textoDigitado = evento.target.value;
                    const resultadoPesquisa = livros.filter(livro => livro.nome.toLowerCase().includes(textoDigitado.toLowerCase()))
                    
                    if (textoDigitado !== "" && textoDigitado != null) {
                        setLivrosPesquisados(resultadoPesquisa)
                    } else {
                        setLivrosPesquisados([{nome: null, id: null, src: null}])
                    }
                }}
            />
            { livrosPesquisados.map( livro => (
                <CentralizaResultado>
                    <Resultado>
                        <CapaLivro src={livro.src} alt={livro.nome} />
                        <p>{livro.nome}</p>
                    </Resultado>
                </CentralizaResultado>
            ) ) }
        </PesquisaContainer>
    )
}

export default Pesquisa