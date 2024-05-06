/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */

          const postButton = document.getElementById("upload_button");
          const fileInput = document.querySelector('input[type="file"]');
          postButton.addEventListener("click",() =>{
              fileInput.click();
          });