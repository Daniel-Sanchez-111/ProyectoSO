<?php
    include_once('../app/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagrama de Gantt</title>
    <link rel="stylesheet" href="<?=BASE_PATH?>public/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <form method="post" action="<?= BASE_PATH ?>" class="form">

        <label>
            Proceso 1
        </label>
        <input type="text" name="proceso1" placeholder="Nombre" required>
        <input type="number" name="proceso1Tl" placeholder="Tiempo de llegada" required >
        <input type="number" name="proceso1Rafaga" placeholder="Rafagas de CPU" required min="1">
        <br>
        <br>

        <label>
            Proceso 2
        </label>
        <input type="text" name="proceso2" placeholder="Nombre" required>
        <input type="number" name="proceso2Tl" placeholder="Tiempo de llegada" required >
        <input type="number" name="proceso2Rafaga" placeholder="Rafagas de CPU" required min="1">
        <br>
        <br>

        <label>
            Proceso 3
        </label>
        <input type="text" name="proceso3" placeholder="Nombre" required>
        <input type="number" name="proceso3Tl" placeholder="Tiempo de llegada" required > 
        <input type="number" name="proceso3Rafaga" placeholder="Rafagas de CPU" required min="1">
        <br>
        <br>

        <label>
            Proceso 4
        </label>
        <input type="text" name="proceso4" placeholder="Nombre" required>
        <input type="number" name="proceso4Tl" placeholder="Tiempo de llegada" required>
        <input type="number" name="proceso4Rafaga" placeholder="Rafagas de CPU" required min="1">
        <br>
        <br>

        <label>
            Proceso 5
        </label>
        <input type="text" name="proceso5" placeholder="Nombre" required>
        <input type="number" name="proceso5Tl" placeholder="Tiempo de llegada" required>
        <input type="number" name="proceso5Rafaga" placeholder="Rafagas de CPU" required min="1">
        <br>
        <br>
        <div>
            <button type="submit">Generar</button>
        </div>
        
    </form>

</body>

<script>

    function findWaitingTime(processes,n,rfg,tr)
    {
        // waiting time for first process is 0
        tr[0] = 0;
   
        // calculating waiting time
        for (let i = 1; i < n; i++) {
            tr[i] = rfg[i - 1] + tr[i - 1];
        }
    }
     
    function findTurnAroundTime(processes,n,rfg,tr,tat)
    {
        // calculating turnaround time by adding
        // bt[i] + wt[i]
        for (let i = 0; i < n; i++) {
            tat[i] = rfg[i] + tr[i];
        }
    }
     
    function findavgTime(processes,n,rfg)
    {
        let tr = new Array(n), tat = new Array(n);
        for(let i=0;i<n;i++)
        {
            tr[i]=0;
            tat[i]=0;
        }
        let total_tr = 0, total_tat = 0;
   
        //Function to find waiting time of all processes
        findWaitingTime(processes, n, rfg, tr);
   
        //Function to find turn around time for all processes
        findTurnAroundTime(processes, n, rfg, tr, tat);
   
        //Display processes along with all details
        document.write("Processes Burst time Waiting"
                       +" time Turn around time<br>");
   
        // Calculate total waiting time and total turn
        // around time
        for (let i = 0; i < n; i++) {
            total_tr = total_tr + tr[i];
            total_tat = total_tat + tat[i];
            document.write("    ", (i + 1)+" ");
            document.write("     "+  rfg[i]+" ");
            document.write("     "+ tr[i]);
            document.write("     "+ tat[i]+"<br>");
        }
        let s = total_tr / n;
        let t = Math.floor(total_tat / n);
        document.write("Average waiting time = "+ s);
        document.write("<br>");
        document.write("Average turn around time = ", t+" ");
    }
     
    let processes=[1,2,3];
    let  n = processes.length;
     
    let burst_time=[10,5,8];
    findavgTime(processes, n, burst_time);

</script>

</html>