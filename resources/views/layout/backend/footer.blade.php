
           
          </div>
          <!-- / Layout page -->
        </div>
  
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
      </div>
      <!-- / Layout wrapper -->
  
     
  
      <!-- Core JS -->
      <!-- build:js assets/vendor/js/core.js -->
      <script src="/backend/assets/vendor/libs/jquery/jquery.js"></script>
      <script src="/backend/assets/vendor/libs/popper/popper.js"></script>
      <script src="/backend/assets/vendor/js/bootstrap.js"></script>
      <script src="/backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  
      <script src="/backend/assets/vendor/js/menu.js"></script>
      <!-- endbuild -->
  
      <!-- Vendors JS -->
      <script src="/backend/assets/vendor/libs/apex-charts/apexcharts.js"></script>
  
      <!-- Main JS -->
      <script src="/backend/assets/js/main.js"></script>
  
      <!-- Page JS -->
      <script src="/backend/assets/js/dashboards-analytics.js"></script>
  
      <!-- Place this tag in your head or just before your close body tag. -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>


      <script>






        var img;
        $(document).ready(() => {
          $('#formFileMultiple').change(function () {
            // const file = this.files[0];
            // console.log(file + this.files.length);
            // alert(this.files.length);
            $("#box_list_images").html("");
            $("#box_image").html("");
            for (let i = 0; i < this.files.length; i++) {
  
              if (this.files[i]) {
                let reader = new FileReader();
                reader.onload = function (event) {
                  // console.log(event.target.result);
                  img = $("<img onclick='showImage(event)' style='width:40px; margin: 0 3px; cursor: pointer;' src=" + event.target.result + " />");
                  $("#box_list_images").append(img);
                  if (i == 0) {
                    $("#box_image").append($("<img id='imgPreview' style='max-width:100%;' src=" + event.target.result + " />"));
                  }
                }
  
                reader.readAsDataURL(this.files[i]);
              }
            }
          });
        });
        function showImage(event) {
          $('#imgPreview').attr('src', event.target.src);
        }
        function detailsshowImage(event) {
          $('#DetailsimgPreview').attr('src', event.target.src);
        }
      </script>
    </body>
  </html>