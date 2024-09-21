export function lexicalOrder(n: number): number[] {
  const result: Array<number> = [];

  const generateList = (base: number, limit: number): number[] => {
    if (base > limit) return [];
    const listLessThanLimit = [base];

    for (let j = 0; j <= 9; j++) {
      if (j + base * 10 <= limit) {
        listLessThanLimit.push(...generateList(j + base * 10, limit));
      } else {
        break;
      }
    }

    return listLessThanLimit;
  };

  for (let i = 1; i <= 9; i++) {
    if (i <= n) {
      result.push(...generateList(i, n));
    }
  }
  return result;
}

// const h = lexicalOrder(999);
// console.log(h);
