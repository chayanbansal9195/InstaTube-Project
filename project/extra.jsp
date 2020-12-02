<html>
   <head>
      <title>Using GET and POST Method to Read Form Data</title>
      
      <style>
          th,td{
              border: 1px solid black;
              border-collapse: collapse;
          }
      </style>
   </head>
   
   <body style='background-color: #e2e8f0'>
      <center>
      <h1>INSTATUBE PROFILE FORM DATA</h1>
      
      <ul style="border: 1px solid black; padding: 3px; margin: 10px; width: 400px">
          <p><b>Name: </b>
              <i><%= request.getParameter("name")%></i>
          </p> </br
          <p><b>Email: </b>
              <i><%= request.getParameter("email")%></i>
          </p> </br>
          <p><b>Mobile: </b>
              <i><%= request.getParameter("mobile")%></i>
          </p> </br><p><b>Country: </b>
              <i><%= request.getParameter("country")%></i>
          </p> </br>
          <p><b>Gender</b>
              <i><%= request.getParameter("gender")%></i>
          </p> </br>
          <p><b>Branch: </b>
              <i><%= request.getParameter("Branch")%></i>
          </p> </br>
          <p><b>Password</b>
              <i><%= request.getParameter("password")%></i>
          </p> </br>
          <p><b>Description</b>
              <i><%= request.getParameter("desc")%></i>
          </p> </br>
         
      </ul>
          <table style='border: 1px solid blue;width:100%;border-collapse: collapse;padding: 15px;text-align: left;border-spacing: 5px'>
              <tr>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Country</th>
                  <th>Gender</th>
                  <th>Branch</th>
                  <th>Password</th>
                  <th>Description</th>
              </tr>
              <tr>
                  <td><%= request.getParameter("name")%></td>
                  <td><%= request.getParameter("email")%></td>
                  <td><%= request.getParameter("mobile")%></td>
                  <td><%= request.getParameter("country")%></td>
                  <td><%= request.getParameter("gender")%></td>
                  <td><%= request.getParameter("Branch")%></td>
                  <td><%= request.getParameter("password")%></td>
                  <td><%= request.getParameter("desc")%></td>
                  
              </tr>
          </table>
   
   </body>
</html>