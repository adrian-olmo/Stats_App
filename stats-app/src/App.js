import logo from './logo.svg';
import './App.css';
import { BrowserRouter, Route } from 'react-router-dom';

//Containers
import { SignUp } from './containers/signup/Signup';
import { Login } from './containers/login/Login';

function App() {
  return (
    <div className="App">
      <BrowserRouter>
        <Route path="/signup" component={SignUp} />
        <Route path="/login" component={Login} />
      </BrowserRouter>
    </div>
  );
}

export default App;
