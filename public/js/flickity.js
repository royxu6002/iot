

(() => {
  $(document).on('shown.bs.modal layoutComplete', (e) => {
    const flickityInstance = $(e.target).find('[data-flickity]');
    flickityInstance.each((index, instance) => {
      const $instance = $(instance);
      if ($instance.data().flickity.isInitActivated) {
        $instance.flickity('resize');
      }
    });
  });
})(jQuery);
