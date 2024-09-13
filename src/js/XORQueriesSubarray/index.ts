export const xorQueries = (arr: number[], queries: number[][]): number[] => {
  const result = [];
  let sum;
  for (let i = 0; i < queries.length; i++) {
    sum = null;
    for (let j = queries[i][0]; j <= queries[i][1]; j++) {
      if (!sum) {
        sum = arr[j];
      } else {
        sum = arr[j] ^ sum;
      }
    }
    if (sum !== null) {
      result.push(sum);
    }
  }
  return result;
};

export const xorQueriesSol2 = (arr: number[], queries: number[][]): number[] => {
  const prefix = Array(arr.length).fill(0);
  prefix[0] = arr[0];
  const result = [];
  for (let i = 1; i < arr.length; i++) {
    prefix[i] = arr[i] ^ prefix[i - 1];
  }
  for (let j = 0; j < queries.length; j++) {
    if (queries[j][0] === 0) {
      result[j] = prefix[queries[j][1]];
    } else {
      result[j] = prefix[queries[j][1]] ^ prefix[queries[j][0] - 1];
    }
  }
  return result;
};

// const h = xorQueriesSol2(
//   [1, 3, 4, 8],
//   [
//     [0, 1],
//     [1, 2],
//     [0, 3],
//     [3, 3],
//   ]
// );
// console.log(h);
