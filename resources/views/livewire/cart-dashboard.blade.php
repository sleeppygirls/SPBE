<div>
    <canvas id="radarChart"  width="200" height="200"></canvas>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
            const ctx = document.getElementById('radarChart');
            const data =@json($data)

            new Chart(ctx, {
                type: 'radar',
                data: data,
                options: {
                },
            });

    </script>
</div>
