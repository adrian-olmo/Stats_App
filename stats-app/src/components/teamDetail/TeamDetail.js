import "./TeamDetail.scss"
import { useEffect, useState } from "react"
import { Link, useParams } from "react-router-dom";
import { fetchDetail } from "../../services/fetchDetail";
import { fetchPlayer } from "../../services/fetchPlayers";

export const TeamDetail = (props) => {

    let [detail, setDetail] = useState([])
    let [player, setPlayer] = useState([])
    let { id } = useParams();

    const getDetail = async () => {
        const result = await fetchDetail(id)
        setDetail(result)
        console.log(result);
    }

    const getPlayer = async () => {
        const players = await fetchPlayer(id)
        setPlayer(players);
        console.log(players);
    }


    useEffect(() => {
        getDetail()
        getPlayer()
    }, [])

    return (
        <>
            <div className='pepe'>
                <h2><strong>{detail.name}</strong></h2>
                <h2><strong>{detail.confederation}</strong></h2>
            </div>
        </>
    )
}