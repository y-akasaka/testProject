<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script> -->
</head>
<body>
    <div>
    </div>
</body>
</html>

<script>
const url = 'http://localhost/testProject/pharmacy-shops/detail/22';


// $.ajax(url,
//       {
//         type: 'get',
//         dataType: 'json'
//       }
//     )
//     .done(function(resonse) {
//       console.log(response);
//     })
//     .fail(function() {
//       console.log('error');
//     });

// $(function() {
//     $.getJSON(url,
//         null,
//         function(data, status) {
//             console.log(data);
//         }
//     );
// });

// axios.get(url, 
// ).then(response => {
//     const shopList = response.data;
//     console.log(response);
//     return shopList;
// })

fetch(url, {
   method: 'GET'
 }).then(function (response) {
    console.log(response);
    console.log(response.json());
    return response.json();
 });


// fetch(url, {
//       headers : { 
//         'Content-Type': 'application/json',
//         'Accept': 'application/json'
//       }
//     })
//     .then(response => response.json())
//     .then(data => {
//       console.log(response);
//     })
</script>