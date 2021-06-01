import dotenv from "dotenv";
export const fetchSignup = async (name, email, password) => {

    try {
        const urlSignup = process.env.SignUp

        const result = await fetch(urlSignup, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                'name': name,
                'email': email,
                'password': password
            })
        });

        return result;

    } catch (error) {
        return error;
    }
}