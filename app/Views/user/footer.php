    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI -->
    <script src="<?= base_url() ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url() ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bootstrap color picker -->
    <script src="<?= base_url() ?>/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- AdminLTE -->
    <script src="<?= base_url() ?>/assets/js/adminlte.js"></script>

    <!-- DataTables -->
    <script src="<?= base_url() ?>/plugins/datatables/jquery.dataTables.js"></script>
    <script src="<?= base_url() ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

    <script>
        $(function () {
            $("#lstProjets").DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });

            // datepicker
            $('.dateDebut').datepicker({
                dateFormat: "dd-mm-yyyy"
            });

            $('.dateFin').datepicker({
                dateFormat: "dd-mm-yyyy"
            });
        });
    </script>
    </body>
</html>