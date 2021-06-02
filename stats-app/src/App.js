import logo from './logo.svg';
import './App.css';
import { BrowserRouter, Route, Switch } from 'react-router-dom';

//Containers
import { SignUp } from './containers/signup/Signup';
import { Login } from './containers/login/Login';
import { Navbar } from './components/navbar/Navbar';
import { Teams } from './containers/teams/Teams';
/* import { Footer } from './components/footer/Footer'; */
import { Gallery } from "./components/gallery/Gallery";
import { TeamDetail } from "./components/teamDetail/TeamDetail";

function App() {


  return (
    <div className="App">
      <BrowserRouter>

        <Navbar />
        <Switch>
          <Route path="/" component={Gallery} exact></Route>
          <Route path="/signup" component={SignUp} />
          <Route path="/login" component={Login} />
          <Route path="/teams" component={Teams} />
          <Route path="/detail/:id" component={TeamDetail} />

        </Switch>

        {/* <Footer /> */}
      </BrowserRouter>

    </div>
  );
}

export default App;
