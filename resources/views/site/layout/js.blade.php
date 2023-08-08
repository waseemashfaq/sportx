<!-- core:js -->


 
 <script src="{{ asset('site/assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('site/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('site/assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('site/assets/js/aos.js')}}"></script>
    <script>
      AOS.init({
        once:true,
      });
    </script>
      <script src="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $('#smartwizard').smartWizard({
      selected: 0, // Initial selected step, 0 = first step
      theme: 'dots', // theme for the wizard, related css need to include for other than default theme
      justified: true, // Nav menu justification. true/false
      autoAdjustHeight: true, // Automatically adjust content height

      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
 
  // SmartWizard initialize
  $('#smartwizard').smartWizard({
    theme: 'arrows',
    keyboardSettings: {
      keyNavigation: true,
      keyLeft: [74], // J key code
      keyRight: [75] // K key code
    } 
  });
 
});
    </script>

