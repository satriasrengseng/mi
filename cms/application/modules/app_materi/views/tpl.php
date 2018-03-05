


<!-- Page Content -->
<div class="md-card" data-uk-grid-margin>
    <div class="md-card-content">
        <h3 class="heading_a">materi</h3><br>
        <?php if( $this->initial_template == '' ): ?>
        <hr/>
        <ul class="uk-tab" data-uk-tab="{connect:'#tabs_anim1', animation:'scale'}">
            <li class="<?=($this->uri->segment(2)==='')?'uk-active':''?>"><a href="#">MTS</a></li>
        </ul>
        <ul id="tabs_anim1" class="uk-switcher uk-margin">
            <li>
                <!-- OUTPUT MESSAGE -->
                <?= $this->messagecontroll->showMessage() ?>
                    <!-- OUTPUT MESSAGE -->
                <?php if( $this->initial_template == '' || $this->initial_template == 'sponsors' ): ?>
                    <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="">
                        <thead>
                            <tr>
                                <th class="uk-text-center">ID</th>
                                <th class="uk-text-center">Mata Pelajaran</th>
                                <th class="uk-text-center">VII</th>
                                <th class="uk-text-center">VIII</th>
                                <th class="uk-text-center">IX</th>
                                <th class="uk-text-center">Tahun Ajar</th>
                                <th class="uk-text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="uk-text-center">ID</th>
                                <th class="uk-text-center">Mata Pelajaran</th>
                                <th class="uk-text-center">VII</th>
                                <th class="uk-text-center">VIII</th>
                                <th class="uk-text-center">IX</th>
                                <th class="uk-text-center">Tahun Ajar</th>
                                <th class="uk-text-center">Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>    
                        <?php   
                        if( count($datadb) > 0 ){
                            foreach($datadb as $row){                         
                                echo '                    
                                    <tr>
                                        <td class="uk-text-center"><span class="uk-text-small uk-text-muted uk-text-nowrap">'.$row['materi_id'].'</span></td>
                                        <td class="uk-text-center">'.$row['materi_ajar'].'</td>
                                        <td class="uk-text-center"><a href='.trim($row['file']).' target="_blank">Lihat materi</a></td>
                                        <td class="uk-text-center"><a href='.trim($row['file']).' target="_blank">Lihat materi</a></td>
                                        <td class="uk-text-center"><a href='.trim($row['file']).' target="_blank">Lihat materi</a></td>
                                        <td class="uk-text-center">'.$row['tahun_ajar'].'</td>
                                        <td class="uk-text-center"><i class="material-icons">edit</i> | <i class="material-icons">delete</i></td>
                                        ';
                                    echo '</tr>';
                            }}else{
                                echo '
                                    <tr>
                                        <td class="uk-text-center"><span class="uk-text-small uk-text-muted uk-text-nowrap"></span></td>
                                        <td></td>
                                        <td></td>
                                        <td><span class="uk-text-danger">Tidak ada materi</span></td>
                                        <td></td>
                                        <td></td>                                        
                                    </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="md-fab-wrapper">
                        <a class="md-fab md-fab-accent" href="<?= base_url($this->app_name) ?>/x">
                            <i class="material-icons">&#xE145;</i>
                        </a>
                    </div>  
                <?php endif; ?>  
            </li>
        </ul>
    </div>
        <?php elseif( $this->initial_template == 'x' ): ?>
            <form action="<?= base_url('app_materi/x') ?>" method="post" enctype="multipart/form-data">
                <div class="uk-margin-medium-bottom">
                    <label for="task_title">Nama Mata Pelajaran</label>
                    <input type="text" name="materi_ajar" class="md-input"> 
                    <br>
                    <div class="uk-grid">
                        <div class="uk-width-medium-1-3">
                            <h5 class="heading_e">
                                materi VII (pdf)<br />
                                Max. Size (2mb)
                            </h5>
                            <div align="center">
                                <br />
                                <div class="uk-form-file md-btn md-btn-primary">
                                    Select
                                    <input id="form-file" type="file" name="file" multiple="multiple">
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-3">
                            <h5 class="heading_e">
                                materi VIII (pdf)<br />
                                Max. Size (2mb)
                            </h5>
                            <div align="center">
                                <br />
                                <div class="uk-form-file md-btn md-btn-primary">
                                    Select
                                    <input id="form-file" type="file" name="file_vii" multiple="multiple">
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-3">
                            <h5 class="heading_e">
                                materi IX (pdf)<br />
                                Max. Size (2mb)
                            </h5>
                            <div align="center">
                                <br />
                                <div class="uk-form-file md-btn md-btn-primary">
                                    Select
                                    <input id="form-file" type="file" name="file_ix" multiple="multiple">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-medium-bottom">
                    <label for="task_title">Tahun Ajaran</label>
                    <input type="text" class="md-input" name="tahun_ajar" />
                </div>
                <br/>
                    <hr> 
                <div class="uk-width-large-1-4 uk-width-medium-2-2 uk-grid-margin uk-row-first">
                    <div class="uk-input-group">
                        <button class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">Save</button>
                        <a href="javascript:window.history.go(-1);" class="md-btn md-btn-danger md-btn-wave-light waves-effect waves-button waves-light">Cancel</a>
                    </div>
                </div>
            </form>

        <?php elseif( $this->initial_template == 'xi' ): ?>
            <form action="<?= base_url('app_materi/xi') ?>" method="post" enctype="multipart/form-data">
                <div class="uk-margin-medium-bottom">
                    <label for="task_title">Nama Mata Pelajaran</label>
                    <input type="text" name="materi_ajar" class="md-input"> 
                    <br>
                    <select name="kd_jenjang_smk" class="md-input">
                        <option value="XI">XI</option>
                    </select>
                    <div class="uk-grid">
                        <div class="uk-width-medium-1-5">
                            <h5 class="heading_e">
                                materi TKJ (pdf)<br />
                                Max. Size (2mb)
                            </h5>
                            <div align="center">
                                <br />
                                <div class="uk-form-file md-btn md-btn-primary">
                                    Select
                                    <input id="form-file" type="file" name="file" multiple="multiple">
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-5">
                            <h5 class="heading_e">
                                materi AK (pdf)<br />
                                Max. Size (2mb)
                            </h5>
                            <div align="center">
                                <br />
                                <div class="uk-form-file md-btn md-btn-primary">
                                    Select
                                    <input id="form-file" type="file" name="file_ak" multiple="multiple">
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-5">
                            <h5 class="heading_e">
                                materi AP (pdf)<br />
                                Max. Size (2mb)
                            </h5>
                            <div align="center">
                                <br />
                                <div class="uk-form-file md-btn md-btn-primary">
                                    Select
                                    <input id="form-file" type="file" name="file_ap" multiple="multiple">
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-5">
                            <h5 class="heading_e">
                                materi MM (pdf)<br />
                                Max. Size (2mb)
                            </h5>
                            <div align="center">
                                <br />
                                <div class="uk-form-file md-btn md-btn-primary">
                                    Select
                                    <input id="form-file" type="file" name="file_mm" multiple="multiple">
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-5">
                            <h5 class="heading_e">
                                materi PM (pdf)<br />
                                Max. Size (2mb)
                            </h5>
                            <div align="center">
                                <br />
                                <div class="uk-form-file md-btn md-btn-primary">
                                    Select
                                    <input id="form-file" type="file" name="file_pm" multiple="multiple">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-medium-bottom">
                    <label for="task_title">Tahun Ajaran</label>
                    <input type="text" class="md-input" name="tahun_ajar" />
                </div>
                <br/>
                    <hr> 
                <div class="uk-width-large-1-4 uk-width-medium-2-2 uk-grid-margin uk-row-first">
                    <div class="uk-input-group">
                        <button class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">Save</button>
                        <a href="javascript:window.history.go(-1);" class="md-btn md-btn-danger md-btn-wave-light waves-effect waves-button waves-light">Cancel</a>
                    </div>
                </div>
            </form>

        <?php elseif( $this->initial_template == 'xii' ): ?>
            <form action="<?= base_url('app_materi/xi') ?>" method="post" enctype="multipart/form-data">
                <div class="uk-margin-medium-bottom">
                    <label for="task_title">Nama Mata Pelajaran</label>
                    <input type="text" name="materi_ajar" class="md-input"> 
                    <br>
                    <select name="kd_jenjang_smk" class="md-input">
                        <option value="XII">XII</option>
                    </select>
                    <div class="uk-grid">
                        <div class="uk-width-medium-1-5">
                            <h5 class="heading_e">
                                materi TKJ (pdf)<br />
                                Max. Size (2mb)
                            </h5>
                            <div align="center">
                                <br />
                                <div class="uk-form-file md-btn md-btn-primary">
                                    Select
                                    <input id="form-file" type="file" name="file" multiple="multiple">
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-5">
                            <h5 class="heading_e">
                                materi AK (pdf)<br />
                                Max. Size (2mb)
                            </h5>
                            <div align="center">
                                <br />
                                <div class="uk-form-file md-btn md-btn-primary">
                                    Select
                                    <input id="form-file" type="file" name="file_ak" multiple="multiple">
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-5">
                            <h5 class="heading_e">
                                materi AP (pdf)<br />
                                Max. Size (2mb)
                            </h5>
                            <div align="center">
                                <br />
                                <div class="uk-form-file md-btn md-btn-primary">
                                    Select
                                    <input id="form-file" type="file" name="file_ap" multiple="multiple">
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-5">
                            <h5 class="heading_e">
                                materi MM (pdf)<br />
                                Max. Size (2mb)
                            </h5>
                            <div align="center">
                                <br />
                                <div class="uk-form-file md-btn md-btn-primary">
                                    Select
                                    <input id="form-file" type="file" name="file_mm" multiple="multiple">
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-5">
                            <h5 class="heading_e">
                                materi PM (pdf)<br />
                                Max. Size (2mb)
                            </h5>
                            <div align="center">
                                <br />
                                <div class="uk-form-file md-btn md-btn-primary">
                                    Select
                                    <input id="form-file" type="file" name="file_pm" multiple="multiple">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-medium-bottom">
                    <label for="task_title">Tahun Ajaran</label>
                    <input type="text" class="md-input" name="tahun_ajar" />
                </div>
                <br/>
                    <hr> 
                <div class="uk-width-large-1-4 uk-width-medium-2-2 uk-grid-margin uk-row-first">
                    <div class="uk-input-group">
                        <button class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">Save</button>
                        <a href="javascript:window.history.go(-1);" class="md-btn md-btn-danger md-btn-wave-light waves-effect waves-button waves-light">Cancel</a>
                    </div>
                </div>
            </form>

        <?php endif; ?>
    </div>
</div>
<!-- End Container -->




<!-- tablesorter -->
<script src="<?= config_item('assets') ?>bower_components/tablesorter/dist/js/jquery.tablesorter.min.js"></script>
<script src="<?= config_item('assets') ?>bower_components/tablesorter/dist/js/jquery.tablesorter.widgets.min.js"></script>
<script src="<?= config_item('assets') ?>bower_components/tablesorter/dist/js/widgets/widget-alignChar.min.js"></script>
<script src="<?= config_item('assets') ?>bower_components/tablesorter/dist/js/extras/jquery.tablesorter.pager.min.js"></script>

<!--  table functions -->
<script src="<?= config_item('assets_js') ?>pages/pages_issues.min.js"></script>

<!-- kendo UI -->
<script src="<?= config_item('assets_js') ?>kendoui_custom.min.js"></script>

<!--  kendoui functions -->
<script src="<?= config_item('assets_js') ?>pages/kendoui.min.js"></script>

<script type="text/javascript">
/**
 * @desc Event onclick remove selected row on Master Data Table
 * used on every master data table
 */
$('.act-remove-table').click(function(){
    if( confirm('Are you sure want to remove this data ?') ){
        window.location = $(this).attr('data-url');
    }
});
</script>