import React, { useEffect, useState } from 'react';
import { useHistory, useParams } from 'react-router';
import './UpdatePlayer.scss';
import { fetchDetail } from "../../services/fetchDetail";
import { FormTeam } from "../../components/formTeam/FormTeam";
import { fetchUpdateTeam } from '../../services/fetchUpdateTeam';
import { Loading } from '../../components/loading/Loading';

export const UpdatePlayer = () => {

    const token = localStorage.getItem('session');
    const [detail, setDetail] = useState();
    let history = useHistory();
    let { id } = useParams();

    useEffect(() => {
        getDetail(id); // TODO: recoger el id que se quiere actualizar de la URL
    }, []);

    const getDetail = async (id) => {
        const result = await fetchDetail(id)
        setDetail(result)
    }

    const updateDetail = async (id, name, confederation, manager, fifa_rank, total_titles, logo) => {
        history.push('/teams')
        const result = await fetchUpdateTeam(id, name, confederation, manager, fifa_rank, total_titles, logo)
    }

    return (
        <div className="app-body">
            {detail &&
                <FormTeam typeCrudAction="UPDATE" id={id} submitFunction={updateDetail} details={detail} message="Actualiza los datos del Jugador" />
            }

            {!detail &&
                <Loading></Loading>
            }
        </div>
    )
}