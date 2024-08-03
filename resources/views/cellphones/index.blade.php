<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treemap - Celulares mais vendidos 2023</title>
    <style>
        .node {
            border: solid 1px white;
            font: 14px sans-serif;
            text-align: center;
            align-items: center;
            display: flex;
            justify-content: center;
            line-height: 12px;
            overflow: hidden;
            position: absolute;
            text-indent: 2px;
        }
    </style>
    <script src="https://d3js.org/d3.v6.min.js"></script>
</head>
<body>
    <div id="treemap" style="width: 100%; height: 100vh;"></div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const data = @json($cellphones);

            const formattedData = {
                name: "cellphones",
                children: data.map(cellphone => ({
                    name: cellphone.brand + ' ' + cellphone.model,
                    value: cellphone.units_sold
                }))
            };

            const width = document.getElementById('treemap').clientWidth;
            const height = document.getElementById('treemap').clientHeight;

            const treemap = d3.treemap()
                .size([width, height])
                .padding(1);

            const root = d3.hierarchy(formattedData)
                .sum(d => d.value);

            treemap(root);

            const minVal = d3.min(root.leaves(), d => d.value);
            const maxVal = d3.max(root.leaves(), d => d.value);

            const color = d3.scaleSequential()
                .domain([minVal, maxVal])
                .interpolator(t => d3.interpolateGreens(t * 0.5 + 0.25));

            const nodes = d3.select('#treemap')
                .selectAll('.node')
                .data(root.leaves())
                .enter().append('div')
                .attr('class', 'node')
                .style('left', d => d.x0 + 'px')
                .style('top', d => d.y0 + 'px')
                .style('width', d => d.x1 - d.x0 + 'px')
                .style('height', d => d.y1 - d.y0 + 'px')
                .style('background', d => color(d.value))
                .text(d => `${d.data.name}: ${d.data.value}`);
        });
    </script>
</body>
</html>
