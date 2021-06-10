import logo from './logo.svg';
import './App.css';
<<<<<<< Updated upstream
=======
import { BrowserRouter, Route, Switch } from 'react-router-dom';

//Containers
import { SignUp } from './containers/signup/Signup';
import { Login } from './containers/login/Login';
import { Navbar } from './components/navbar/Navbar';
import { Teams } from './containers/teams/Teams';
import { Footer } from './components/footer/Footer';
import { Gallery } from "./components/gallery/Gallery";
import { TeamDetail } from "./components/teamDetail/TeamDetail";
import { UpdateTeam } from './containers/updateTeam/UpdateTeam';
import { CreateTeam } from './containers/createTeam/CreateTeam';
import { CreatePlayer } from "./containers/createPlayer/CreatePlayer";
import { UpdatePlayer } from './containers/updatePlayer/UpdatePlayer';
import { Matches } from './containers/matches/Matches';
import { CreateMatch } from './containers/createMatch/CreateMatch';
import { UpdateMatch } from './containers/updateMatch/UpdateMatch';
import { UserProfile } from "./containers/userProfile/UserProfile";
import { FormUser } from './components/formUser/FormUser';
>>>>>>> Stashed changes

function App() {
  return (
    <div className="App">
<<<<<<< Updated upstream
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <p>
          Edit <code>src/App.js</code> and save to reload.
        </p>
        <a
          className="App-link"
          href="https://reactjs.org"
          target="_blank"
          rel="noopener noreferrer"
        >
          Learn React
        </a>
      </header>
=======
      <BrowserRouter>

        <Navbar />
        <Switch>
          <Route path="/" component={Gallery} exact></Route>
          <Route path="/signup" component={SignUp} exact />
          <Route path="/login" component={Login} exact />
          <Route path="/teams" component={Teams} exact />
          <Route path="/detail/:id" component={TeamDetail} exact />
          <Route path="/change-team/:id" component={UpdateTeam} exact />
          <Route path="/new-team" component={CreateTeam} exact />
          <Route path="/new-player" component={CreatePlayer} exact />
          <Route path="/change-player/:id" component={UpdatePlayer} exact />
          <Route path="/matches" component={Matches} exact />
          <Route path="/new-match" component={CreateMatch} />
          <Route path="/change-match/:id" component={UpdateMatch} exact />
          <Route path="/user/profile" component={UserProfile} exact />
          <Route path="/user/profile/data" component={FormUser} exact />

        </Switch>
      </BrowserRouter>

>>>>>>> Stashed changes
    </div>
  );
}

export default App;
