export function diffWaysToCompute(expression: string): number[] {
  const result: number[] = [];
  for (let i = 0; i < expression.length; i++) {
    const char = expression[i];
    if (['+', '-', '*'].includes(char)) {
      const left = diffWaysToCompute(expression.slice(0, i));
      const right = diffWaysToCompute(expression.slice(i + 1));
      for (const r of right) {
        for (const l of left) {
          if (char === '+') {
            result.push(l + r);
          } else if (char === '-') {
            result.push(l - r);
          } else if (char === '*') {
            result.push(l * r);
          }
        }
      }
    }
  }
  if (result.length === 0) {
    result.push(parseInt(expression));
  }
  return result;
}

const h = diffWaysToCompute('2*3-4*5');
console.log(h);

// 2-1-1
//(2-1)-3
// 2-(1-3)
