import { useState } from "react";
import { useHistory } from "react-router";
import "./CardTeam.scss";


export const CardTeam = (props) => {

    let [team, setTeam] = useState(null);
    let history = useHistory();

    const handlerId = async () => {
        setTeam(props.id);
        history.push(`/detail/${props.id}`);
    }

    return (
        <div className='card-team-box'>
            <div className='card-team'>
                <div className='team-img'>
                    <img src={props.logo} />
                </div>
                <p>{props.name}</p>
                <p>{props.confederation}</p>

                <button className='button button-card' onClick={() => handlerId()}>Ver Mas</button>
            </div>
        </div >
    )
}