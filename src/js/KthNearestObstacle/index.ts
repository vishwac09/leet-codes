// import { PriorityQueue } from '@datastructures-js/priority-queue';

export const resultsArray = (queries: number[][], k: number): number[] => {
  const output = [],
    distanceFromOrigin = [];
  for (let i = 0; i < queries.length; i++) {
    distanceFromOrigin.push(Math.abs(queries[i][0]) + Math.abs(queries[i][1]));
    distanceFromOrigin.sort((a, b) => a - b);
    if (distanceFromOrigin.length < k) {
      output.push(-1);
    } else {
      output.push(distanceFromOrigin[k - 1]);
    }
  }
  return output;
};

// const j = resultsArray1([
//   [5, 5],
//   [4, 4],
//   [3, 3],
// ], 1);

// const l = resultsArray([
//   [1, 2],
//   [3, 4],
//   [2, 3],
//   [-3, 0],
// ], 2);

// console.log(j);
// console.log(l);

// var resultsArray = function (queries, k) {
// 	const distance = ([x, y]) => Math.abs(x) + Math.abs(y);
// 	const res = new Array(queries.length).fill(-1);
// 	const pq = new PriorityQueue({ compare: (a, b) => b - a });
// 	let count = 0;
// 	for (const query of queries) {
// 		pq.enqueue(distance(query));
// 		count++;
// 		if (count >= k) {
// 			if (count > k) pq.dequeue();
// 			res[count - 1] = pq.front();
// 		}
// 	}
// 	return res;
// };
