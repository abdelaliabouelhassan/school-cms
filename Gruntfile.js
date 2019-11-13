module.exports = function(grunt) {
    grunt.initConfig({
		sass: {
			options: {
                includePaths: ['node_modules/bootstrap-sass/assets/stylesheets']
            },
            dist: {
				options: {
					outputStyle: 'compressed'
				},
                files: [{
					expand: true,
					cwd: 'public/assets/scss', /*root folder for styles*/
					src: 'main.scss', /* file path which have to be converted into css after the root folder*/
					dest: 'public/assets/css/',/* css file path where the converted files have to be placed*/
					ext: '.css' /*file extention for converted files*/
				}]
            }
        },
        uglify: {
          my_target: {
            files: {
               'public/assets/bundles/libscripts.bundle.js': ['public/assets/plugins/jquery/jquery-v3.2.1.min.js','public/assets/plugins/bootstrap/js/bootstrap.js'], /* main js*/

               'public/assets/bundles/vendorscripts.bundle.js': ['public/assets/plugins/jquery-slimscroll/jquery.slimscroll.js','public/assets/plugins/node-waves/waves.js'], /* coman js*/

               'public/assets/bundles/morphingsearchscripts.bundle.js': ['public/assets/plugins/morphingsearch/morphingsearch.js','public/assets/js/morphing.js'], /* coman js*/

               'public/assets/bundles/mainscripts.bundle.js': ['public/assets/js/admin.js','assets/js/demo.js'], /* coman js*/

               'public/assets/bundles/flotscripts.bundle.js': ['public/assets/plugins/flot-charts/jquery.flot.js','public/assets/plugins/flot-charts/jquery.flot.resize.js','public/assets/plugins/flot-charts/jquery.flot.pie.js','public/assets/plugins/flot-charts/jquery.flot.categories.js','public/assets/plugins/flot-charts/jquery.flot.time.js'], /* Flot Chart js*/

               'public/assets/bundles/chartscripts.bundle.js': ['public/assets/plugins/chartjs/Chart.bundle.js'], /* ChartJs js*/

               'public/assets/bundles/datatablescripts.bundle.js': ['public/assets/plugins/jquery-datatable/jquery.dataTables.min.js','public/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.js'], /* Jquery DataTable Plugin Js  */

               'public/assets/bundles/morrisscripts.bundle.js': ['public/assets/plugins/raphael/raphael.min.js','public/assets/plugins/morrisjs/morris.js'], /* Morris Plugin Js */

               'public/assets/bundles/flotchartsscripts.bundle.js': ['public/assets/plugins/flot-charts/jquery.flot.js','public/assets/plugins/flot-charts/jquery.flot.resize.js','public/assets/plugins/flot-charts/jquery.flot.pie.js','public/assets/plugins/flot-charts/jquery.flot.categories.js','public/assets/plugins/flot-charts/jquery.flot.time.js'], /* Morris Plugin Js */

               'public/assets/bundles/fullcalendarscripts.bundle.js': ['public/assets/plugins/fullcalendar/lib/moment.min.js','public/assets/plugins/fullcalendar/lib/jquery-ui.custom.min.js','public/assets/plugins/fullcalendar/fullcalendar.min.js'],   /* calender page js */

               'public/assets/bundles/jvectormapscripts.bundle.js': ['public/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js', 'public/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js']   /* JVectorMap Plugin Js */

              }
            }
        }

    });
    grunt.loadNpmTasks("grunt-sass");
    grunt.loadNpmTasks('grunt-contrib-uglify');

    grunt.registerTask("buildcss", ["sass"]);
    grunt.registerTask("buildjs", ["uglify"]);
};
