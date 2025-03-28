<script>
    let timerInterval;
    Swal.fire({
        icon: "<?=(!empty($alert_icon))?$alert_icon:""?>",
        title: "<?=(!empty($alert_title))?$alert_title:""?>",
        html: "<?=(!empty($alert_text))?$alert_text:""?>",
        timer: 1000,
        timerProgressBar: false,
        didOpen: () => {
            Swal.showLoading();
            const timer = Swal.getPopup().querySelector("b");
            timerInterval = setInterval(() => {
                timer.textContent = `${Swal.getTimerLeft()}`;
            }, 100);
        },
        willClose: () => {
            clearInterval(timerInterval);
        }
    }).then((result) => {
        <?php if (!empty($alert_url)){ ?>
            window.location = "<?=$alert_url?>";
            // document.write("<?=$alert_url?>");
        <?php } else { ?>
            window.location.replace(localStorage.getItem("boutiqueBlue-crm-ruta"));
        <?php } ?>
    });
</script>