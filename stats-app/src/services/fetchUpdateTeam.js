export const fetchUpdateTeam = async (id, name, confederation, manager, fifa_rank, total_titles, logo) => {

    try {
        console.log(id);
        const urlUpdateTeam = `http://localhost:8000/api/admin/team/${id}`
        let result = await fetch(urlUpdateTeam, {
            method: 'PATCH',
            headers: { 'Content-Type': 'application/json', 'Authorization': 'Bearer ' + localStorage.getItem('session') },
            body: JSON.stringify({
                'name': name,
                'confederation': confederation,
                'manager': manager,
                'fifa_rank': fifa_rank,
                'total_titles': total_titles,
                'logo': logo
            })
        })
        return result;

    } catch (error) {
        console.log(error);
    }
}