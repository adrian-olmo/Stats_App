export const fetchMatches = async () => {

    try {
        const UrlMatches = process.env.REACT_APP_UrlMatches
        let result = await fetch(UrlMatches, {
            method: 'GET',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'Authorization': 'Bearer ' + localStorage.getItem('session')
            }
        })
        return result.json();


    } catch (error) {
        console.log(error);
    }
}