import React, { useEffect, useState } from 'react';
import { useHistory } from 'react-router';
import './Teams.scss';
import { fetchTeams } from "../../services/fetchTeams";
import { CardTeam } from '../../components/cardTeam/CardTeam';

export const Teams = () => {

    const [teams, setTeams] = useState(null);
    const token = localStorage.getItem('session');
    let history = useHistory();

    useEffect(() => {
        getTeams();
    }, []);

    const getTeams = async () => {
        try {
            const res = await fetchTeams();

            if (res) {
                setTeams(res)
            }

        } catch (error) {
            console.log(error);
        }
    }

    return (
        <div className="app-body">
            <div className="display-teams">
                <button type="">CREAR EQUIPO</button>
                <h2><strong>Equipos</strong></h2>
                {teams && <div className="display-teams-grid">
                    {teams.map(equipo => <CardTeam key={teams.indexOf(equipo)}
                        id={equipo.id}
                        name={equipo.name}
                        confederation={equipo.confederation}
                        logo={equipo.logo}></CardTeam>)}
                </div>}
            </div>
        </div>
    )
}