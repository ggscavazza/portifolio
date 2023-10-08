import Header from './components/Header'
import Pesquisa from './components/Pesquisa'
import UltimosLancamentos from './components/UltimosLancamentos'
import styled from 'styled-components'

const AppContainer = styled.div`
  width: 100vw;
  height: 100vh;
  background-image: linear-gradient(90deg, #002f52 35%, #326589 165%);
`

function App() {
  return (
    <AppContainer>
      <Header/>
      <Pesquisa />
      <UltimosLancamentos />
    </AppContainer>
  );
}

export default App
