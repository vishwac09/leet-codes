export const findContentChildren = (g: number[], s: number[]): number => {
  g.sort((a, b) => a - b);
  s.sort((a, b) => a - b);
  let p1 = 0,
    p2 = 0;
  while (p1 < g.length && p2 < s.length) {
    if (s[p2] >= g[p1]) {
      p1++;
      p2++;
    } else {
      p2++;
    }
  }
  return p1;
};
