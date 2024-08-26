export const islandPerimeter = (grid: number[][]): number => {
  const row = grid.length;
  const col = grid[0].length;
  let perimeters = 0;

  const checkNeighBour = (i = 0, j = 0) => {
    let neighBourCount = 0;
    // top
    if (grid?.[i - 1]?.[j] && grid[i - 1][j] === 1) {
      neighBourCount++;
    }
    // bottom
    if (grid?.[i + 1]?.[j] && grid[i + 1][j] === 1) {
      neighBourCount++;
    }
    // left
    if (grid?.[i]?.[j - 1] && grid[i][j - 1] === 1) {
      neighBourCount++;
    }
    // right
    if (grid?.[i]?.[j + 1] && grid[i][j + 1] === 1) {
      neighBourCount++;
    }
    return neighBourCount;
  };

  for (let i = 0; i < row; i++) {
    for (let j = 0; j < col; j++) {
      if (grid[i][j] === 1) {
        const js = checkNeighBour(i, j);
        perimeters += 4 - js;
      }
    }
  }
  return perimeters;
};

// const peremiter = islandPerimeter([[1,0]]);
// const peremiter = islandPerimeter([[0,1,0,0],[1,1,1,0],[0,1,0,0],[1,1,0,0]]);
// console.log(peremiter);
