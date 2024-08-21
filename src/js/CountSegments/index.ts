export const countSegments = (s: string): number => {
  return s.split(' ').flatMap((e) => (e.length ? e : [])).length;
};
