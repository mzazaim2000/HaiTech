function loadTable() {
    const xhttp = new XMLHttpRequest();
    xhttp.open("GET", "https://www.mecallapi.com/api/users");
    xhttp.send();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);
        var trHTML = ''; 
        const objects = JSON.parse(this.responseText);
        for (let object of objects) {
          trHTML += '<tr>'; 
          trHTML += '<td>'+object['id']+'</td>';
        //   trHTML += '<td><img width="50px" src="'+object['avatar']+'" class="avatar"></td>';
          trHTML += '<td>'+object['fname']+'</td>';
          trHTML += '<td>'+object['sname']+'</td>';
          trHTML += '<td>'+object['email']+'</td>';
          trHTML += '<td>'+object['contact']+'</td>';
          trHTML += '<td><button type="button" class="btn btn-outline-secondary" onclick="showUserEditBox('+object['id']+')">Edit</button>';
          trHTML += '<button type="button" class="btn btn-outline-danger" onclick="userDelete('+object['id']+')">Del</button></td>';
          trHTML += "</tr>";
        }
        document.getElementById("mytable").innerHTML = trHTML;
      }
    };
  }
  
  loadTable();

  function showUserCreateBox() {
    Swal.fire({
      title: 'Create user',
      html:
        '<input id="id" type="hidden">' +
        '<input id="fname" class="swal2-input" placeholder="Firstname">' +
        '<input id="sname" class="swal2-input" placeholder="Surname">' +
        '<input id="email" class="swal2-input" placeholder="Email">' +
        '<input id="contact" class="swal2-input" placeholder="Contact">',
      focusConfirm: false,
      preConfirm: () => {
        userCreate();
      }
    })
  }
  
  function userCreate() {
    const fname = document.getElementById("fname").value;
    const sname = document.getElementById("sname").value;
    const email = document.getElementById("email").value;
    const contact = document.getElementById("contact").value;
      
    const xhttp = new XMLHttpRequest();
    xhttp.open("POST", "https://www.mecallapi.com/api/users/create");
    xhttp.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    xhttp.send(JSON.stringify({ 
      "fname": fname, "sname": sname, "email": email, "contact": contact, 
      "avatar": "https://www.mecallapi.com/users/cat.png"
    }));
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        const objects = JSON.parse(this.responseText);
        Swal.fire(objects['message']);
        loadTable();
      }
    };
  }