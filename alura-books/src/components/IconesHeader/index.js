import perfil from '../../images/perfil.svg'
import sacola from '../../images/sacola.svg'
import styled from 'styled-components'

const Icone = styled.li`
  width: 25px;
`

const Icones = styled.ul`
  display: flex;
  align-items: center;
  gap: 40px;
`

const icones = [perfil, sacola]

function IconesHeader() {
    return (
        <Icones>
          { icones.map( (icone) => (
            <Icone><img src={icone} alt=''></img></Icone>
          ) ) }
        </Icones>
    )
}

export default IconesHeader