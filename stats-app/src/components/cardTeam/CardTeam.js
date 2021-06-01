import { useState } from "react";
import { useHistory } from "react-router";
import "./CardTeam.scss";


export const CardTeam = (props) => {

    let [team, setTeam] = useState(null);
    let history = useHistory;

    const handlerId = async () => {
        setTeam(props.id);
        history.push(`/team/${props.id}`);
    }

    return (
        <div className='card-team-box'>
            <div className='card-team'>
                <div className='team-img'>
                    <img src={props.logo} />
                    <p>Imagen</p>
                </div>
                <p>HOLA</p>
                <p>MUNDO</p>

                <button className='button button-card'></button>
            </div>
        </div>
    )
}