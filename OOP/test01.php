<?php
Class Test01{
    public $nama;
    public $tinggi;
    public $nilai;

    public function __construct($nama,$tinggi,$nilai){
        $this->nama = $nama;
        $this->tinggi = $tinggi;
        $this->nilai = $nilai;
    }
    public function info(){
        return "{$this->nama} bertinggi badan {$this->tinggi}cm, nilai PHP nya {$this->nilai}";
    }
}

$maulidya = new Test01("Maulidya",170,90);
$naura = new Test01("Naura",167,97);
$shen = new Test01("Shen Fa",179,99);
$lige = new Test01("Lige",165,90);
$pecheng = new Test01("Pecheng",177,99);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Kriteria</th>
        </tr>
        <tr>
            <td>1</td>
            <td><?= $maulidya->info(); ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?= $naura->info(); ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><?= $shen->info(); ?></td>
        </tr>
        <tr>
            <td>4</td>
            <td><?= $lige->info(); ?></td>
        </tr>
        <tr>
            <td>5</td>
            <td><?= $pecheng->info(); ?></td>
        </tr>
    </table>
    
</body>
</html>