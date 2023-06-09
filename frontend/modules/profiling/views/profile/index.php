<?php
/** @var yii\web\View $this */
?>
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Striped Full Width Table Striped rows</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th style="width: 10px">#</th>
                    <th class="">Nama</th>
                    <th>DOB</th>
                    <th>IC No</th>
                    <th style="width: 40px">Label</th>
                </tr>
                <?php
                    $i = 1;
                    foreach($model as $data) {
                        echo '<tr>
                                <td>'.$i.'</td>
                                <td>'.$data->profilNamaPertama.' '.$data->profilNamaAkhir.'</td>
                                <td>'.$data->profilDOB.'</td>
                                <td>'.($data->profilAccount == null ? null : $data->profilAccount->username).'</td>
                                <td><span class="badge bg-red">55%</span></td>
                            </tr>';
                            $i++;
                    }
                ?>
                <tr>
                    <td>1.</td>
                    <td>Update software</td>
                    <td>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                    </td>
                    <td>Apr 12, 2017</td>
                    <td><span class="badge bg-red">55%</span></td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Clean database</td>
                    <td>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                        </div>
                    </td>
                    <td>Apr 12, 2017</td>
                    <td><span class="badge bg-yellow">70%</span></td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Cron job running</td>
                    <td>
                        <div class="progress progress-xs progress-striped active">
                            <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                        </div>
                    </td>
                    <td>Apr 12, 2017</td>
                    <td><span class="badge bg-light-blue">30%</span></td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Fix and squish bugs</td>
                    <td>
                        <div class="progress progress-xs progress-striped active">
                            <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                        </div>
                    </td>
                    <td>Apr 12, 2017</td>
                    <td><span class="badge bg-green">90%</span></td>
                </tr>
            </table>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<h1>profile/index</h1>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
