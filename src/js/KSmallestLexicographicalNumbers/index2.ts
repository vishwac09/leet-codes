export function findKthNumber(n: number, k: number): number {
  let curr = 1;
  k--;
  while (k > 0) {
    const step = countSteps(n, curr, curr + 1);
    if (step <= k) {
      curr++;
      k -= step;
    } else {
      curr *= 10;
      k--;
    }
  }
  return curr;
}

function countSteps(n: number, p1: number, p2: number) {
  let steps = 0;
  while (p1 <= n) {
    steps += Math.min(n + 1, p2) - p1;
    p1 *= 10;
    p2 *= 10;
  }
  return steps;
}
