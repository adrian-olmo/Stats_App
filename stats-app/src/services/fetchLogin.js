export const fetchLogin = async (email, password) => {

    try {
        const urlLogin = 'http://localhost:8000/login'

        const result = await fetch(urlLogin, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                'email': email,
                'password': password
            })
        })

        return result;

    } catch (error) {
        return error
    }
}