<?php
require_once "Student.php";
require_once "connection.php";
   $select=$connection->prepare('SELECT * FROM students');
   $select->execute();
   $students=$select->fetchAll(PDO::FETCH_CLASS,'Student');
   /*var_dump($students);*/
?>
<h3>All students Data:</h3>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Student Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    
   
<?php foreach ($students as $student):?>
     <tr>
         <td><?=$student->id?></td>
         <td><?= $student->full_name?></td>
         <td><?=$student->email?></td>
         <td><?=$student->phone?></td>
         <td>
             <a href="profile.php?id=<?=$student->id?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="navy" d="M13 8h-8v-1h8v1zm0 2h-8v-1h8v1zm-3 2h-5v-1h5v1zm11.172 12l-7.387-7.387c-1.388.874-3.024 1.387-4.785 1.387-4.971 0-9-4.029-9-9s4.029-9 9-9 9 4.029 9 9c0 1.761-.514 3.398-1.387 4.785l7.387 7.387-2.828 2.828zm-12.172-8c3.859 0 7-3.14 7-7s-3.141-7-7-7-7 3.14-7 7 3.141 7 7 7z"/></svg></a> 
             <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="darkorange" d="M8.424 12.282l4.402 4.399-5.826 1.319 1.424-5.718zm15.576-6.748l-9.689 9.804-4.536-4.536 9.689-9.802 4.536 4.534zm-6 8.916v6.55h-16v-12h6.743l1.978-2h-10.721v16h20v-10.573l-2 2.023z"/></svg></a>
             <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="red" d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.597 17.954l-4.591-4.55-4.555 4.596-1.405-1.405 4.547-4.592-4.593-4.552 1.405-1.405 4.588 4.543 4.545-4.589 1.416 1.403-4.546 4.587 4.592 4.548-1.403 1.416z"/></svg></a></td>
     </tr>
   <?php endforeach;?> 
    </tbody>
</table>     
    