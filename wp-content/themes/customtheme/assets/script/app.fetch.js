const getData = async function(data) {
    try {
        let response = await fetch (data)
        if(response.ok) {
            let responseData = await response.json()
            return responseData
        } else {
            console.error('Retour du serveur  : ', response.status)
        }
    } catch (e) {
        console.log(e)
    }    
} 

