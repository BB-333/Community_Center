

// File Upload Handler - Volunteer Page

function fileUploadHandler(evt)
{
    var files = evt.target.files;

    var table = document.getElementById("fileDetails");

    var row1 = table.insertRow(1)
    var cell1 = row1.insertCell(0)
    cell1.innerHTML = files[0].name;
}

// Festival Submit Button Change Text

function changeText(submitId) 
{
    var submit = document.getElementById(submitId);
    submit.value = 'Sent!';
    return false;
}