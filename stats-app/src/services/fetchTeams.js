export const fetchTeams = async () => {

    try {
        console.log(1);
        const urlTeams = 'http://localhost:8000/api/teams'
        console.log(2);

        let result = await fetch(urlTeams, {
            method: 'GET',
            headers: { 'Content-Type': 'application/json' }
        });


        result = result.json();

        return result

    } catch (error) {
        console.log(error);
    }
}