export const fetchUpdatePlayer = async (id, name, age, matches, debut, team_id, position_id) => {

    try {
        const urlUpdatePlayer = `http://localhost:8000/api/admin/player/${id}`
        let result = await fetch(urlUpdatePlayer, {
            method: 'PATCH',
            headers: { 'Content-Type': 'application/json', 'Authorization': 'Bearer ' + localStorage.getItem('session') },
            body: JSON.stringify({
                'name': name,
                'age': age,
                'matches': matches,
                'debut': debut,
                'team_id': team_id,
                'position_id': position_id
            })
        })

        return result

    } catch (error) {
        console.log(error);
    }
}