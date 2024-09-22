export function lexicalOrder(n: number, k: number): number {
  const result: Array<string> = [];
  for (let i = 0; i < n; i++) {
    result.push(String(i + 1));
  }
  result.sort((a, b) => a.localeCompare(b));
  return result.map((a) => parseInt(a))[k];
}

// const h = lexicalOrder(13);
// console.log(h);
