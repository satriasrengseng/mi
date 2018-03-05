


<!-- Page Content -->
<div class="md-card" data-uk-grid-margin>
    <div class="md-card-content">
        <h3 class="heading_a">Silabus</h3><br>
        <?php if( $this->initial_template == '' ): ?>

        <hr/>
        <ul class="uk-tab" data-uk-tab="{connect:'#tabs_anim1', animation:'scale'}">

            <li class="<?=($this->uri->segment(2)==='' || $this->uri->segment(2)==='officers' || $this->uri->segment(2)==='officersEdit')?'uk-active':''?>"><a href="#">MI</a></li>
        </ul>
        <ul id="tabs_anim1" class="uk-switcher uk-margin">
            <li>
                <?php if( $this->initial_template == '' || $this->initial_template == 'sponsors' ): ?>
                    <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="">
                        <thead>
                            <tr>
                                <th class="uk-text-center">ID</th>
                                <th>Nama Mata Pelajaran</th>
                                <th>Kelas 1</th>
                                <th>Kelas 2</th>
                                <th>Kelas 3</th>
                                <th>Kelas 4</th>
                                <th>Kelas 5</th>
                                <th>Kelas 6</th>
                                <th>Silabus Tahun Ajar</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="uk-text-center">ID</th>
                                <th>Nama Mata Pelajaran</th>
                                <th>Kelas 1</th>
                                <th>Kelas 2</th>
                                <th>Kelas 3</th>
                                <th>Kelas 4</th>
                                <th>Kelas 5</th>
                                <th>Kelas 6</th>
                                <th>Silabus Tahun Ajar</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        <?php
                        if( count($datadb) > 0 ){
                            foreach($datadb as $row){
                                echo '
                                    <tr>
                                        <td class="uk-text-center"><span class="uk-text-small uk-text-muted uk-text-nowrap">'.$row['silabus_id'].'</span></td>
                                        <td>'.$row['silabus_nm_pel'].'</td>
                                        <td><a href='.trim($row['silabus_kls_1']).' target="_blank">Lihat Silabus</a></td>
                                        <td><a href='.trim($row['silabus_kls_2']).' target="_blank">Lihat Silabus</a></td>
                                        <td><a href='.trim($row['silabus_kls_3']).' target="_blank">Lihat Silabus</a></td>
                                        <td><a href='.trim($row['silabus_kls_4']).' target="_blank">Lihat Silabus</a></td>
                                        <td><a href='.trim($row['silabus_kls_5']).' target="_blank">Lihat Silabus</a></td>
                                        <td><a href='.trim($row['silabus_kls_6']).' target="_blank">Lihat Silabus</a></td>
                                        <td>'.$row['tahun_ajar'].'</td>
                                        ';
                                    echo '</tr>';
                            }}else{
                                echo '
                                    <tr>
                                        <td class="uk-text-center"><span class="uk-text-small uk-text-muted uk-text-nowrap"></span></td>
                                        <td>

                                        </td>
                                        <td><span class="uk-text-danger">Tidak ada Silabus</span></td>
                                        <td></td>
                                    </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                    <ul class="uk-pagination ts_pager">
                        <li data-uk-tooltip title="Select Page">
                            <select class="ts_gotoPage ts_selectize"></select>
                        </li>
                        <li class="first"><a href="javascript:void(0)"><i class="uk-icon-angle-double-left"></i></a></li>
                        <li class="prev"><a href="javascript:void(0)"><i class="uk-icon-angle-left"></i></a></li>
                        <li><span class="pagedisplay"></span></li>
                        <li class="next"><a href="javascript:void(0)"><i class="uk-icon-angle-right"></i></a></li>
                        <li class="last"><a href="javascript:void(0)"><i class="uk-icon-angle-double-right"></i></a></li>
                        <li data-uk-tooltip title="Page Size">
                            <select class="pagesize ts_selectize">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                            </select>
                        </li>
                    </ul>
                    <div class="md-fab-wrapper">
                        <a class="md-fab md-fab-accent" href="<?= base_url($this->app_name) ?>/mts">
                            <i class="material-icons">&#xE145;</i>
                        </a>
                    </div>
                <?php endif; ?>
            </li>
        </ul>
    </div>
        <?php elseif( $this->initial_template == 'mts' ): ?>
            <form action="<?= base_url('app_silabus/mi') ?>" method="post" enctype="multipart/form-data">
                <div class="uk-margin-medium-bottom">
                    <label for="task_title">Nama Mata Pelajaran</label>
                    <input type="text" name="silabus_nm_pel" class="md-input">
                    <br>
                    <div class="uk-grid">
                        <div class="uk-width-medium-1-3">
                            <h5 class="heading_e">
                                File Silabus (pdf, docx, xlsx)<br />
                                Max. Size (2mb)
                            </h5>
                            <div align="center">
                                <br />
                                <div class="uk-form-file md-btn md-btn-primary">
                                    Select
                                    <input id="form-file" type="file" name="silabus_kls_1" multiple="multiple">
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-3">
                            <h5 class="heading_e">
                                File Silabus (pdf, docx, xlsx)<br />
                                Max. Size (2mb)
                            </h5>
                            <div align="center">
                                <br />
                                <div class="uk-form-file md-btn md-btn-primary">
                                    Select
                                    <input id="form-file" type="file" name="silabus_kls_2" multiple="multiple">
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-3">
                            <h5 class="heading_e">
                                File Silabus (pdf, docx, xlsx)<br />
                                Max. Size (2mb)
                            </h5>
                            <div align="center">
                                <br />
                                <div class="uk-form-file md-btn md-btn-primary">
                                    Select
                                    <input id="form-file" type="file" name="silabus_kls_3" multiple="multiple">
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-3">
                            <h5 class="heading_e">
                                File Silabus (pdf, docx, xlsx)<br />
                                Max. Size (2mb)
                            </h5>
                            <div align="center">
                                <br />
                                <div class="uk-form-file md-btn md-btn-primary">
                                    Select
                                    <input id="form-file" type="file" name="silabus_kls_4" multiple="multiple">
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-3">
                            <h5 class="heading_e">
                                File Silabus (pdf, docx, xlsx)<br />
                                Max. Size (2mb)
                            </h5>
                            <div align="center">
                                <br />
                                <div class="uk-form-file md-btn md-btn-primary">
                                    Select
                                    <input id="form-file" type="file" name="silabus_kls_5" multiple="multiple">
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-3">
                            <h5 class="heading_e">
                                File Silabus (pdf, docx, xlsx)<br />
                                Max. Size (2mb)
                            </h5>
                            <div align="center">
                                <br />
                                <div class="uk-form-file md-btn md-btn-primary">
                                    Select
                                    <input id="form-file" type="file" name="silabus_kls_6" multiple="multiple">
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
