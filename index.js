let html = document.querySelector(".tbody");
let users = [];
fetch("http://test/users")
    .then(x => x.json())
    .then(y => y.forEach(element => {
        html.innerHTML += `
            <tr>
                <td>${element.username}</td>
                <td>${element.age}</td>
                <td><a href='/update/?id=${element.id}' class="btn btn-primary btn-sm">Update</a></td>
                <td><a href='/delete/?id=${element.id}' class="btn btn-danger btn-sm">Delete</a></td>
            </tr>
        ` 
    })).catch(error => {
        if(error) {
            html.innerHTML+=`
                <tr>
                    <td>No Data Found!</td>
                </tr>
            `
        }
    });