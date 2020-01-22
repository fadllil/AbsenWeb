<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
</head>

<body>
    <h1 align="center">Rekap Absen Dinas Koperasi, Usaha Kecil dan Menegah Kota Pekanbaru</h1>
    <?php echo date('d-m-Y'); ?>
    <table id="example1" class="table table-bordered">
        <thead>
            <tr>
                <th rowspan="2" style="text-align:center">No</th>
                <th rowspan="2" style="text-align:center">Nama</th>
                <th rowspan="2" style="text-align:center">NIP</th>
                <th colspan="3" style="text-align:center">Absen</th>
                <th colspan="3" style="text-align:center">Keterangan</th>
            <tr>
                <th>Pagi</th>
                <th>Siang</th>
                <th>Sore</th>
                <th>Sakit</th>
                <th>Izin</th>
                <th>Alfa</th>
                <th>DL</th>
                <th>Cuti</th>
            </tr>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $q = $ap;
            $w = $asi;
            $e = $aso;
            $s = $sakit;
            $i = $izin;
            $af = $alfa;
            $dl = $dinas_luar;
            $ct = $cuti;

            foreach ($dt as $pg) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $pg->nama ?></td>
                    <td><?php echo $pg->nip_p ?></td>
                    <?php for ($a = 0; $a < count($q); $a++) {
                        if ($pg->nip_p == $q[$a]->nip_p) { ?>
                            <td><?php echo $q[$a]->ap ?></td>
                        <?php
                    } else { ?>
                        <?php }
                }
                for ($b = 0; $b < count($w); $b++) {
                    if ($pg->nip_p == $w[$b]->nip_p) { ?>
                            <td><?php echo $w[$b]->asi ?></td>
                        <?php
                    } else { ?>
                        <?php }
                }
                for ($c = 0; $c < count($e); $c++) {
                    if ($pg->nip_p == $e[$c]->nip_p) { ?>
                            <td><?php echo $e[$c]->aso ?></td>
                        <?php
                    } else { ?>
                        <?php }
                } ?>
                    <td>
                        <?php
                        for ($d = 0; $d < count($s); $d++) {
                            if ($pg->nip_p == $s[$d]->nip_p) { ?>
                                <?php echo $s[$d]->sakit ?>
                            <?php
                        } else { ?>
                            <?php }
                    }
                    echo "</td>";
                    echo "<td>";
                    for ($f = 0; $f < count($i); $f++) {
                        if ($pg->nip_p == $i[$f]->nip_p) { ?>
                                <?php echo $i[$f]->izin ?>
                            <?php
                        } else { ?>
                            <?php }
                    }
                    echo "</td>";
                    echo "<td>";
                    for ($g = 0; $g < count($af); $g++) {
                        if ($pg->nip_p == $af[$g]->nip_p) { ?>
                                <?php echo $af[$g]->alfa ?>
                            <?php
                        } else { ?>
                            <?php }
                    }
                    echo "</td>";
                    echo "<td>";
                    for ($h = 0; $h < count($dl); $h++) {
                        if ($pg->nip_p == $dl[$h]->nip_p) { ?>
                                <?php echo $dl[$h]->dinas_luar ?>
                            <?php
                        } else { ?>
                            <?php }
                    }
                    echo "</td>";
                    echo "<td>";
                    for ($j = 0; $j < count($ct); $j++) {
                        if ($pg->nip_p == $ct[$j]->nip_p) { ?>
                                <?php echo $ct[$j]->cuti ?>
                            <?php
                        } else { ?>
                                <?php echo "-" ?>
                            <?php }
                    } ?>
                    </td>
                <?php } ?>
            </tr>
        </tbody>
    </table>
</body>

</html>