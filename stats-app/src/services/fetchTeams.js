export const fetchTeams = async () => {

    try {
        const urlTeams = 'http://localhost:8000/api/teams'

        const result = await fetch(urlTeams, {
            method: 'GET',
            headers: { 'Content-Type': 'application/json' }
        });

        return result

    } catch (error) {
        return error;
    }
}